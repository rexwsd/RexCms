<?php


namespace App\Extension\Log;


use App\Extension\Log\Processors\ChannelProcessor;
use App\Extension\Log\Processors\ContextProcessor;
use App\Extension\Log\Processors\CustomHandler;
use App\Extension\Log\Processors\HostProcessor;
use App\Extension\Log\Processors\UidProcessor;
use Carbon\Carbon;
use Illuminate\Log\LogManager;
use Illuminate\Support\Facades\Log;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\IntrospectionProcessor;
use Psr\Log\LoggerInterface;

class CreateCustomLogger extends LogManager
{
    /**@var $log Logger* */
    protected $log;
    protected $fileName;
    

    private function init(){
        $this->log = new Logger($this->fileName);
        try {
            // 增加当前脚本的文件名和类名等信息
            $this->log->pushProcessor(new IntrospectionProcessor(Logger::DEBUG, array('Illuminate\\')));
            // 把机器名称添加到日志中
            $this->log->pushProcessor(new HostProcessor());
            // 把频道名添加到日志中
            $this->log->pushProcessor(new ChannelProcessor($this->log->getName()));
            $this->log->pushProcessor(new UidProcessor(10));
            $this->log->pushProcessor(new ContextProcessor());
            $handler = new CustomHandler(storage_path('logs/' . Carbon::now()->toDateString() . '/' . $this->fileName . '.log'));
            $handler->setFormatter(new LineFormatter("\r\n\r\n\r\n\r\n\033[1;37;48m================系统信息==================\033[0m \r\n[\033[0;31;48m日志产生时间 : %datetime%\033[0m] \r\n[级别 : %level_name%] [主机 : %extra.host_name%] [channel : %extra.channel_name%] [唯一 ID : \033[0;36;48m %extra.uid% \033[0m]\r\n[日志产生自 : \033[1;34;48m %extra.file% \033[0m:\033[0;35;48m 第%extra.line%行 \033[0m]\r\n\033[1;37;48m---------------记录信息开始-------------->\033[0m\r\n\033[1;32;48m\r\n%message% :\r\n\r\n%extra.context% \r\n\033[0m \r\n\033[1;37;48m<--------------记录信息结束---------------\033[0m", 'Y-m-d H:i:s,u', true, true));
            $this->log->pushHandler($handler);
        } catch (\Exception $e) {
            Log::emergency('$this->fileName', $e);
        }
    }
    
    public function channel($channel = null)
    {
        $this->fileName = $channel;
        $this->init();
        return $this;
    }

    public function info($message, array $context = [])
    {
        $this->log->info($message, $context);
    }
    
    public function warning($message, array $context = [])
    {
        $this->log->warning($message, $context); 
    }
    
    public function emergency($message, array $context = [])
    {
        $this->log->emergency($message, $context); 
    }
    
    public function alert($message, array $context = [])
    {
        $this->log->alert($message, $context); 
    }
    
    public function critical($message, array $context = [])
    {
        $this->log->critical($message, $context); 
    }
    
    public function error($message, array $context = [])
    {
        $this->log->error($message, $context); 
    }
    
    public function notice($message, array $context = [])
    {
        $this->log->notice($message, $context); 
    }
    
    public function debug($message, array $context = [])
    {
        $this->log->debug($message, $context); 
    }

}
