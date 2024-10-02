<?php

declare(strict_types=1);

namespace Enqueue\RdKafka;

class XmlSerializer implements Serializer
{
    public function toString(RdKafkaMessage $message): string
    {
        return $message->getBody();
    }

    public function toMessage(string $string): RdKafkaMessage
    {
        return new RdKafkaMessage($string);
    }
}
