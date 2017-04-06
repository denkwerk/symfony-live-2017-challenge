<?php declare(strict_types = 1);

namespace Denkwerk\SfLiveTesting\Fixtures;

trait TextTrait
{
    //texts
    public function getTextAboutDenkwerk()
    {
        return 'denkwerk zählt zu den führenden Digitalagenturen Deutschlands. Wir sind ein Team von 180 Denkern und Machern aus 19 Nationen. Gemeinsam sind wir auf einer Mission, die digitale Welt sinnvoller, schöner und funktionaler zu gestalten.';
    }

    public function getTextHowWeWork()
    {
        return 'Wir arbeiten interdisziplinär, mit Fokus auf die Bedürfnisse der Nutzer und Blick auf die Spielräume der Zukunft. Dabei sehen wir unsere Kunden als Teil des Teams und verfolgen einen agilen, iterativen Prozess. Das schafft Verständnis, Transparenz und ist die Basis für erfolgreiche und innovative digitale Produkte.';
    }

    public function getTextDenkwerkClients()
    {
        return 'Auf denkwerk vertrauen Unternehmen wie BMW, Deutsche Bank, E.ON, Condor, OBI, Storck, Telekom und Zwilling. Wenn auch Sie gemeinsam mit uns etwas Großartiges auf die Beine stellen wollen, dann freuen wir uns über Ihre Kontaktaufnahme.';
    }

    public function getDescriptionForSymfonyDeveloperJob()
    {
        return 'Als Symfony Developer (m/w) bist Du für die technische Konzeption und Entwicklung von Webanwendungen auf Basis von Symfony innerhalb spannender Kundenprojekte verantwortlich. Dein Fokus liegt dabei auf der Umsetzung, Weiterentwicklung und Pflege von Web-Applikationen wie zum Beispiel personalisierte Bereiche, Buchungs– und Checkout-Prozesse und die Anbindung von WebServices.';
    }


    public function getDescriptionForFullStackDeveloperJob()
    {
        return 'Als Web Developer (m/w) (Full Stack) bist Du für die Umsetzung von Webprojekten gemeinsam mit Deinem interdisziplinären Team verantwortlich. Zu Deinen Aufgaben gehören die Entwicklung und Umsetzung anspruchsvoller Templates für komplexe Websites anhand von Design-Vorlagen und Konzepten.';
    }

    public function getDescriptionForPhpDeveloperJob()
    {
        return 'Als PHP Entwickler (m/w) schreibst Du anspruchsvolle Software für komplexe Web-Applikationen. Als Mitglied eines interdisziplinären Teams bist Du in technisch komplexen und prozessorientierten Projekten maßgeblich an der technischen Konzeption beteiligt und hast dabei einen klaren Blick auf Budgets, Termine und Qualität.';
    }

    //excerpts
    public function getExcerptTextAboutDenkwerk()
    {
        return 'denkwerk zählt zu den führenden Digitalagenturen Deutschlands. Wir sind ein Team von 180 Denkern und Machern aus 19 Nationen. Gemeinsam sind ...';
    }

    public function getExcerptTextHowWeWork()
    {
        return 'Wir arbeiten interdisziplinär, mit Fokus auf die Bedürfnisse der Nutzer und Blick auf die Spielräume der Zukunft. Dabei sehen wir unsere ...';
    }

    public function getExcerptTextDenkwerkClients()
    {
        return 'Auf denkwerk vertrauen Unternehmen wie BMW, Deutsche Bank, E.ON, Condor, OBI, Storck, Telekom und Zwilling. Wenn auch Sie gemeinsam mit uns ...';
    }

    public function getExcerptDescriptionForSymfonyDeveloperJob()
    {
        return 'Als Symfony Developer (m/w) bist Du für die technische Konzeption und Entwicklung von Webanwendungen auf Basis von Symfony innerhalb ...';
    }


    public function getExcerptDescriptionForFullStackDeveloperJob()
    {
        return 'Als FullStack Developer (m/w) (Full Stack) bist Du für die Umsetzung von Webprojekten gemeinsam mit Deinem interdisziplinären Team ...';
    }

    public function getExcerptDescriptionForPhpDeveloperJob()
    {
        return 'Als PHP Entwickler (m/w) schreibst Du anspruchsvolle Software für komplexe Web-Applikationen. Als Mitglied eines interdisziplinären Teams ...';
    }
}
