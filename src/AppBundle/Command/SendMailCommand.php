<?php
namespace AppBundle\Command;

    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Input\InputArgument;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use JMS\JobQueueBundle\Command\ScheduleCommand;
    use JMS\JobQueueBundle\Cron\JobScheduler;
    use JMS\JobQueueBundle\Entity\Job;
    

    class SendMailCommand extends ScheduleCommand
    {
        // configure, execute, etc. ...
        protected function configure()
        {
            $this->setName('send-mail-command')
                ->setDescription('Envia correos a los contactos');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $em = $this->getContainer()->get('doctrine')->getManager();
            // Hacemos lo que sea
            $date = new \DateTime();
            $date->add(new \DateInterval('PT30M'));
            $job = $this->createCronJob($date);
            $em->persist($job);
            $em->flush();                                                   
            $output->writeln('Hola mundo');
            $em->flush();
        }

        public function shouldBeScheduled(\DateTime $lastRunAt)
        {
            return time() - $lastRunAt->getTimestamp() >= 864; // Se ejecuta cada 864 segundos para enviar un solo correo.
        }

        public function createCronJob(\DateTime $lastRunAt)
        {
            return new Job('send-mail-command');
        }
    }