<?php

declare(strict_types=1);

namespace ThreeStreams\Defence\Factory;

use Symfony\Component\HttpFoundation\Request;
use ThreeStreams\Defence\Envelope;
use ThreeStreams\Defence\Logger\NullLogger;

class EnvelopeFactory
{
    /**
     * Creates an envelope containing a Symfony HTTPFoundation `Request` and an instance of the Defence logger,
     * which is good enough for simply getting information from the filters to the handler.
     */
    public function createDefaultEnvelope(): Envelope
    {
        return new Envelope(Request::createFromGlobals(), new NullLogger());
    }
}
