<?php

namespace HuangYi\Shadowfax\Events;

class WorkerStopEvent
{
    /**
     * The Swoole server instance.
     *
     * @var \Swoole\Server
     */
    public $server;

    /**
     * The worker id.
     *
     * @var int
     */
    public $workerId;

    /**
     * Create a new WorkerStopEvent instance.
     *
     * @param  \Swoole\Server  $server
     * @param  int  $workerId
     * @return void
     */
    public function __construct($server, $workerId)
    {
        $this->server = $server;
        $this->workerId = $workerId;
    }
}
