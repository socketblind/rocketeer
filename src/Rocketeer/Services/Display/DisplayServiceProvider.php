<?php
namespace Rocketeer\Services\Display;

use League\Container\ServiceProvider\AbstractServiceProvider;

class DisplayServiceProvider extends AbstractServiceProvider
{
    /**
     * @var array
     */
    protected $provides = [
        'timer',
        'explainer',
    ];

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->container->share('timer', function () {
            return new QueueTimer($this->container);
        });

        $this->container->share('explainer', function () {
            return new QueueExplainer($this->container);
        });
    }
}