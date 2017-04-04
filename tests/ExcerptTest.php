<?php
namespace Denkwerk\Tests;

use Denkwerk\Service\Fixtures\TextTrait;
use PHPUnit\Framework\TestCase;

class ExceptTest extends TestCase
{

    use TextTrait;

    public function testExcerptTextAboutDenkwerk()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getTextAboutDenkwerk()),
            $this->getExcerptTextAboutDenkwerk());
    }

    public function testExcerptTextHowWeWork()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getTextHowWeWork()),
            $this->getExcerptTextHowWeWork()
        );
    }


    public function testExcerptTextDenkwerkClients()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getTextDenkwerkClients()),
            $this->getExcerptTextDenkwerkClients()
        );
    }

    public function testExcerptDescriptionForSymfonyDeveloperJob()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getDescriptionForSymfonyDeveloperJob()),
            $this->getExcerptDescriptionForSymfonyDeveloperJob()
        );
    }

    public function testExcerptDescriptionForFullStackDeveloperJob()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getDescriptionForFullStackDeveloperJob()),
            $this->getExcerptDescriptionForFullStackDeveloperJob()
        );
    }

    public function testExcerptDescriptionForPhpDeveloperJob()
    {
        $this->assertEquals(
            (new \Denkwerk\Service\ExceptService())->createExcerptFromText($this->getDescriptionForPhpDeveloperJob()),
            $this->getExcerptDescriptionForPhpDeveloperJob()
        );
    }
}