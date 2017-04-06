<?php
namespace Denkwerk\Tests;

use Denkwerk\SfLiveTesting\Fixtures\TextTrait;
use Denkwerk\SfLiveTesting\ExcerptService;
use PHPUnit\Framework\TestCase;

class ExceptTest extends TestCase
{
    /** FIXME
     * Your task is to fix these Tests
     * Take a look at ExcerptService an add the necessary logic to pass trough all assertions
     **/

    use TextTrait;

    public function testExcerptTextAboutDenkwerk()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getTextAboutDenkwerk()),
            $this->getExcerptTextAboutDenkwerk());
    }

    public function testExcerptTextHowWeWork()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getTextHowWeWork()),
            $this->getExcerptTextHowWeWork()
        );
    }


    public function testExcerptTextDenkwerkClients()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getTextDenkwerkClients()),
            $this->getExcerptTextDenkwerkClients()
        );
    }

    public function testExcerptDescriptionForSymfonyDeveloperJob()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getDescriptionForSymfonyDeveloperJob()),
            $this->getExcerptDescriptionForSymfonyDeveloperJob()
        );
    }

    public function testExcerptDescriptionForFullStackDeveloperJob()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getDescriptionForFullStackDeveloperJob()),
            $this->getExcerptDescriptionForFullStackDeveloperJob()
        );
    }

    public function testExcerptDescriptionForPhpDeveloperJob()
    {
        $this->assertEquals(
            (new ExcerptService())->createExcerptFromText($this->getDescriptionForPhpDeveloperJob()),
            $this->getExcerptDescriptionForPhpDeveloperJob()
        );
    }
}
