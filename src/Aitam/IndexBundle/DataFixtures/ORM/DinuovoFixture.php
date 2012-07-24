<?php

namespace Aitam\IndexBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Aitam\IndexBundle\Entity\Dinuovo;

class DinuovoFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $dinuovo1 = new Dinuovo();
        $dinuovo1->setTitle('inaugurato lo stadio');
        $dinuovo1->setArticolo('inaugurato alla presenza di 40 mila spettatori, che hanno celebrato evento esattamente a 2012 
        		ore dalla cerimonia di apertura dei Giochi del prossimo 27 luglio.
                Una bambina di 9 anni, scelta fra il pubblico da un arciere della squadra olimpica britannica, 
        		ha avuto onore di lanciare dei palloncini bianchi nel freddo della notte londinese.
                Il presidente del comitato organizzatore (Locog) 
        		Sebastian Coe ha parlato di �momento storico� al termine della festa di inaugurazione durante 
        		la quale ci sono stati anche momenti intrattenimento musicale con artisti locali 
        		e spettacoli a base di laser. Ora lo stadio verr� inaugurato anche dal punto di vista agonistico, 
        		perch� per sperimentare piste e pedane vi si svolgeranno le gare dei campionati 
        		universitari di atletica leggera, che testeranno impianto per sei giorni.
                �� un evento molto importante per molte ragioni - ha spiegato Coe -.
        		 Vedere degli atleti per la prima volta su questa pista sar� un momento speciale. 
        		Ed anche gli spettatori svolgeranno un ruolo importantissimo per sperimentare questo impianto�.');
        $dinuovo1->setImage('stadio.jpg');
        $dinuovo1->setAuthor('tempe');
        $dinuovo1->setTags('stadio, inagurazione');
        $dinuovo1->setCreated(new \DateTime());
        $dinuovo1->setUpdated($dinuovo1->getCreated());
        $manager->persist($dinuovo1);

        $dinuovo2 = new Dinuovo();
        $dinuovo2->setTitle('Il ponte sul rio negro');
        $dinuovo2->setArticolo('� stato inaugurato il ponte sul Rio Negro. opera � maestosa dal punto di vista ingegneristico.
        		 A chi � provvisto di automobile fa risparmiare tempo e mal di fegato: basta code ai traghetti. 
        		Chi usa i mezzi pubblici vede invece crescere il numero delle stazioni della sua via crucis e 
        		ha pi� biglietti da pagare per poter arrivare in centro di Manaus. Il governo ha gi� cominciato 
        		ad espropriare terreni con la scusa di costruire la citt� universitaria. Quanto agli studenti possa interessare 
        		poter studiare a pochi metri dalla spiaggia, quanta democrazia ci sia nella decisione solitaria 
        		di un governatore, quanta strategia ci sia nell espropriare con la scusa dell�universit� 
        		per poi cambiare la destinazione del terreno liberato da famiglie che abitavano l� da anni, 
        		non lo si vede chiaramente. Continuo ad essere critico rispetto al nuovo ponte, 
        		perch� � pensato per favorire la grande industria ma ci viene raccontato che serve per il nostro benessere.
        		 Certo � una comunicazione in pi�, e in questo senso potr� avere anche risvolti positivi.
        		 Per ora ha solo causato la lottizzazione di grandi aree di bosco, con un aumento dei prezzi 
        		dei terreni tale che rende impossibile metter su casa alle famiglie giovani.');
        $dinuovo2->setImage('ponte.jpg');
        $dinuovo2->setAuthor('tempe2');
        $dinuovo2->setTags('ponte,rio negro,');
        $dinuovo2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $dinuovo2->setUpdated($dinuovo2->getCreated());
        $manager->persist($dinuovo2);



        $manager->flush();
    }

}
