<?php

namespace Aitam\IndexBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Aitam\IndexBundle\Entity\Dinuovo;
use Doctrine\Common\Persistence\ObjectManager; 

class DinuovoFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $dinuovo1 = new Dinuovo();
        $dinuovo1->setTitle('Lo stadio dei mondiali');
        $dinuovo1->setArticolo('La posizione della città di Manaus costituisce senza dubbio una delle sue attrazioni 
        		più notevoli: la confluenza dei fiumi Negro (Nero) e Solimões (conosciuto come il Rio delle in questa 
        		parte del Brasile). Le acque di colore scuro del primo e le acque fangose del secondo per 
        		oltre 18 chilometri, danno vita ad uno dei luoghi più maestosi del Rio delle Amazzoni.
                Da quando è stata abitata nel 1669, Manaus si è costantemente evoluta fino a diventare la capitale 
        		dello stato di Amazonas. Manaus è la dodicesima città più popolosa del Brasile, con poco più di due 
        		milioni di abitanti, ed è diventato una potenza economica nel corso del 20 ° secolo, dopo la costruzione 
        		del polo industriale di Manaus.
                Il clima equatoriale di Manaus è un altro dei suoi tratti più interessanti, con una temperatura media 
        		annuale di 28 º C, l’umidità dell’aria è di oltre l’80 per cento. Nella città ci sono due stagioni 
        		ben definite: quella delle piogge (da dicembre a maggio) e la cosiddetta stagione secca, tra giugno e 
        		novembre, quando le precipitazioni non sono così intense e le temperature possono raggiungere 
        		anche i 40 º C.
                La combinazione di straordinarie bellezze naturali, le tradizioni locali di una metropoli in continua 
        		crescita, offrono un’atmosfera unica, grazie alle seguenti caratteristiche: il Teatro Amazonas 
        		(una sala da concerto impressionante che ospita l’annuale Amazonas Opera Festival) e il Boi-Manaus, 
        		che è una celebrazione che si svolge in concomitanza di una ricorrenza della città, cullata dal suono 
        		del ritmo tipico del “Bumba-boi”.');
        $dinuovo1->setImage('stadio.jpg');
        $dinuovo1->setAuthor('tempe');
        $dinuovo1->setTags('stadio, inagurazione');
        $dinuovo1->setCreated(new \DateTime());
        $dinuovo1->setUpdated($dinuovo1->getCreated());
        $manager->persist($dinuovo1);

        $dinuovo2 = new Dinuovo();
        $dinuovo2->setTitle('Il ponte sul rio negro');
        $dinuovo2->setArticolo('É stato inaugurato il ponte sul Rio Negro. opera è maestosa dal punto di vista ingegneristico.
        		 A chi è provvisto di automobile fa risparmiare tempo e mal di fegato: basta code ai traghetti. 
        		Chi usa i mezzi pubblici vede invece crescere il numero delle stazioni della sua via crucis e 
        		ha più biglietti da pagare per poter arrivare in centro di Manaus. Il governo ha già cominciato 
        		ad espropriare terreni con la scusa di costruire la città universitaria. Quanto agli studenti possa interessare 
        		poter studiare a pochi metri dalla spiaggia, quanta democrazia ci sia nella decisione solitaria 
        		di un governatore, quanta strategia ci sia nell espropriare con la scusa dell´università 
        		per poi cambiare la destinazione del terreno liberato da famiglie che abitavano lì da anni, 
        		non lo si vede chiaramente. Continuo ad essere critico rispetto al nuovo ponte, 
        		perché è pensato per favorire la grande industria ma ci viene raccontato che serve per il nostro benessere.
        		 Certo è una comunicazione in più, e in questo senso potrà avere anche risvolti positivi.
        		 Per ora ha solo causato la lottizzazione di grandi aree di bosco, con un aumento dei prezzi 
        		dei terreni tale che rende impossibile metter su casa alle famiglie giovani');
        $dinuovo2->setImage('ponte.jpg');
        $dinuovo2->setAuthor('tempe2');
        $dinuovo2->setTags('ponte,rio negro,');
        $dinuovo2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $dinuovo2->setUpdated($dinuovo2->getCreated());
        $manager->persist($dinuovo2);

        $dinuovo3 = new Dinuovo();
        $dinuovo3->setTitle('Il calcio a Manaus');
        $dinuovo3->setArticolo('La città di Manaus è sede di molte di squadre di calcio, nello stato di Amazonas e,
        		 di conseguenza, di rivalità varie. Il Nacional Futebol Clube detiene il record di titoli, 
        		ma nel corso degli ultimi anni il São Raimundo Esporte Clube ha guadagnato l’attenzione nazionale,
        		 con buone prestazioni in Copa do Brasil. Le altre contendenti tradizionali sono Atletico 
        		Rio Negro Clube, Nacional Fast Club e l’America Futebol Clube.
                Lo stadio Vivaldo di Lima, conosciuto anche come la Vivaldão, 
        		è il campo di calcio più importante della zona dell’Amazonas ed ha ospitato le partite decisive 
        		dello Stato fin dalla sua inaugurazione: il 5 aprile 1970, quando la nazionale brasiliana si fermò 
        		a Manaus pochi giorni prima del viaggio verso il Messico per la FIFA World Cup. In quell’occasione 
        		il Brasile ha sconfitto una squadra dello Stato di Amazonas per 4-1, in un match che è stato seguito 
        		da personalità importanti, come l’allora presidente della FIFA, Stanley Rous.');
        $dinuovo3->setImage('calcio.jpg');
        $dinuovo3->setAuthor('tempe2');
        $dinuovo3->setTags('calcio,manaus,');
        $dinuovo3->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $dinuovo3->setUpdated($dinuovo3->getCreated());
        $manager->persist($dinuovo3);

        $dinuovo4 = new Dinuovo();
        $dinuovo4->setTitle('Il calcio a Manaus');
        $dinuovo4->setArticolo('Per un mese, dal 13 giugno al 13 luglio del 2014, in quella che se non si
        		 può considerare la patria del calcio, almeno si può ritenere la culla del calcio più spettacolare,
        		 si disputerà la ventesima edizione dei campionati mondiali. La terra più colorata del mondo si 
        		tingerà con i colori di 32 squadre provenienti da tutto il mondo, pronte a darsi battaglia per 
        		aggiudicarsi l’ambito trofeo. Le qualificazioni alla fase finale del mondiale avranno inizio a 
        		settembre 2012 e si concuderanno a novembre dell’anno successivo: sono 32 i posti a disposizione,
        		 e le squadre qualificate confluiranno alla fine in otto gironi da quattro.
        		
                Non è stato facile per la nazione brasiliana riuscire ad aggiudicarsi l’edizione dei mondiali, 
        		innanzitutto per il gran numero di candidature ricevute dalla Fifa, ma soprattutto perchè quest’ultima 
        		ha impiegato un pò per rendersi conto che il Brasile aveva tutte le carte in regola per ospitare un 
        		evento di questo tipo. In corsa c’erano anche Cile, Australia, Argentina e Stati Uniti, ma alla fine
        		 l’idea della rotazione ha avuto la meglio, e dopo un sopralluogo di 9 giorni attraverso gli impianti 
        		di alcune tra le città ospitanti: Porto Alegre, Rio de Janeiro, San Paolo, Belo Horizonte e Brasilia, 
        		gli ispettori dell’organizzazione mondiale hanno dato il loro beneplacito.

                Gli altri impianti in cui si disputeranno le partite dei mondiali di calcio del 2014 in Brasile 
        		sono quelli di Fortaleza, Manaus, Curitiba, Recife, Natal e Salvador de Bahia. Lo stadio più grande 
        		dell’edizione sarà ovviamente il Maracanà di Rio de Janeiro, che ospiterà la finalissima del 13 luglio. 
        		Lo stadio più piccolo è invece il Joaquim Americo Guimaraes di Curitiba');
        $dinuovo4->setImage('2014.jpg');
        $dinuovo4->setAuthor('tempe2');
        $dinuovo4->setTags('2014,calcio,manaus,');
        $dinuovo4->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $dinuovo4->setUpdated($dinuovo4->getCreated());
        $manager->persist($dinuovo4);
        
        $dinuovo5 = new Dinuovo();
        $dinuovo5->setTitle('Il calcio a Manaus');
        $dinuovo5->setArticolo('La città di Manaus è sede di molte di squadre di calcio, nello stato di Amazonas e,
        		di conseguenza, di rivalità varie. Il Nacional Futebol Clube detiene il record di titoli,
        		ma nel corso degli ultimi anni il São Raimundo Esporte Clube ha guadagnato l’attenzione nazionale,
        		con buone prestazioni in Copa do Brasil. Le altre contendenti tradizionali sono Atletico
        		Rio Negro Clube, Nacional Fast Club e l’America Futebol Clube.
        		Lo stadio Vivaldo di Lima, conosciuto anche come la Vivaldão,
        		è il campo di calcio più importante della zona dell’Amazonas ed ha ospitato le partite decisive
        		dello Stato fin dalla sua inaugurazione: il 5 aprile 1970, quando la nazionale brasiliana si fermò
        		a Manaus pochi giorni prima del viaggio verso il Messico per la FIFA World Cup. In quell’occasione
        		il Brasile ha sconfitto una squadra dello Stato di Amazonas per 4-1, in un match che è stato seguito
        		da personalità importanti, come l’allora presidente della FIFA, Stanley Rous.');
        $dinuovo5->setImage('calcio.jpg');
        $dinuovo5->setAuthor('tempe2');
        $dinuovo5->setTags('calcio,manaus,');
        $dinuovo5->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $dinuovo5->setUpdated($dinuovo5->getCreated());
        $manager->persist($dinuovo5);
    
        $manager->flush();
        
        $this->addReference('dinuovo-1', $dinuovo1);
        $this->addReference('dinuovo-2', $dinuovo2);
        $this->addReference('dinuovo-3', $dinuovo3);
        $this->addReference('dinuovo-4', $dinuovo4);
        $this->addReference('dinuovo-5', $dinuovo5);
        }
        
        public function getOrder()
        {
        	return 1;
        }
    

}
