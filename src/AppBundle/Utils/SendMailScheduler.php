<?php

class SendMailScheduler implements JobScheduler
{
    public function getCommands(): array
    {
        return ['send-mail-command'];
    }

    public function shouldSchedule($commandName, \DateTime $lastRunAt)
    {
        return time() - $lastRunAt->getTimestamp() >= 864; // Se ejecuta cada 864 segundos para enviar un solo correo.
    }

    public function createJob($commandName, \DateTime $lastRunAt)
    {
        return new Job('send-mail-command');
    }
}