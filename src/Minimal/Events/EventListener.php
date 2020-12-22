<?php

namespace Minimal;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EventListener implements EventSubscriberInterface
{
	public static function getSubscribedEvents()
    {
        return ['eventName' => 'onResponse'];
    }

    public function onResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();

        if ($response->isRedirection()
            || ($response->headers->has('Content-Type') && false === strpos($response->headers->get('Content-Type'), 'html'))
            || 'html' !== $event->getRequest()->getRequestFormat()
        ) {
            return;
        }

        $response->setContent($response->getContent().'GA CODE');
    }
    
}