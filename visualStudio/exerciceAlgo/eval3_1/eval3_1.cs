using System;

namespace eval3_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int samedi;
            int sacs;
            int magasin;
            int articles;
            int temps;
            int forme;
            int tempsPourSport;
            int boisson;
            int connexionInternet;
            int voitureGarage;
            int midi;
            int motiver;
            int restaurant;
            int ski;
            int amis;
            int repas;

            Console.WriteLine("C'est Samedi ? (1=Oui/2=Non)");
            samedi = int.Parse(Console.ReadLine());

            if (samedi > 1 )
            {
                Console.WriteLine("Je vais faire autre chose bye bye !!!! :p");
                Environment.Exit(0);
            }
            else
            {
                Console.WriteLine("Je me souviens que je dois faire mes courses!!!");
                Console.WriteLine("Je me prépare à sortir avec mes sacs de courses et ma liste de courses.");

                Console.WriteLine("Mes sacs sont vide ?(1=oui/2=Non)");
                sacs = int.Parse(Console.ReadLine());
                do
                {
                    if (sacs > 1)
                    {
                        Console.WriteLine("Je les vide rapidement, sont-ils vident a présent? (1=oui/2=non)");
                        sacs = int.Parse(Console.ReadLine());
                    }
                } while (sacs > 1 );

                Console.WriteLine("Je m'en vais faire mes course");
                Console.WriteLine("Par chance le magasin n'est pas trop loin et le temps extérieur ne me dérange pas trop sur le chemin");

                do
                {
                    
                    Console.WriteLine("Arriver au magsin ? (1=oui/2=non)");
                    magasin = int.Parse(Console.ReadLine());

                } while (magasin > 1);

                do
                {

                    Console.WriteLine("Je suis bien arrivé au magasin, Je prends quelques articles est-ce-que j'ai tout ce que je voulais ? (1=oui/2=non) ");
                    articles = int.Parse(Console.ReadLine());

                } while (articles > 1);

                Console.WriteLine("J'ai tout je vais au caisse et je paie");

                Console.WriteLine("Je rentre, je range mes achats. J’ai pu voir le temps extérieur en allant et revenant des courses. Selon le temps, je vais m’occuper différemment :");

                Console.WriteLine("Quel temps fait-il? 1=beau? 2=pluie? 3=neige?");
                temps = int.Parse(Console.ReadLine());

                // il fait beau!!!!!!!!!!!!!!!!!!!

                if (temps < 2)
                {
                    Console.WriteLine("Il fait beau, je vais aller me promener le long de la rivière. Je pourrai profiter des installations sportives si je me sens en forme et si j’ai eu le temps de m’échauffer sur le chemin");
                    
                    Console.WriteLine("Je suis en forme ? 1=oui/2=non)");
                    forme = int.Parse(Console.ReadLine());

                    Console.WriteLine("J'ai le temps pour du sport ? 1=oui/2=non)");
                    tempsPourSport = int.Parse(Console.ReadLine());

                    if (forme < 2 && tempsPourSport < 2 )
                    {
                        Console.WriteLine("Je prends de faire du sport et je serais de retour pour préparer mon repas ce midi");
                    }
                    else
                    {
                        Console.WriteLine("Je vais observer la faune encore présente en ce début de journée. Je serais de retour pour préparer mon repas ce midi.");
                    }
                }

                // il pleut !!!!!!!

                if (temps > 1 && temps < 3)
                {
                    Console.WriteLine("Je reste chez moi au chaud");
                    Console.WriteLine("je prends un café=1 ou un thé=2");
                    boisson = int.Parse(Console.ReadLine());

                    if(boisson > 1)
                    {
                        Console.WriteLine("Je prends un thé");
                    }
                    else
                    {
                        Console.WriteLine("Je prends un café");
                    }

                    Console.WriteLine("Ma connexion tient-elle le coup ? oui=1/non=2)");
                    connexionInternet = int.Parse(Console.ReadLine());

                    if (connexionInternet > 1)
                    {
                        Console.WriteLine("Du coup ce sera lecture du dernier livre de mon auteur favoris.");
                    }
                    else
                    {
                        Console.WriteLine("Je continue ma série préférée sur ma télé");
                    }
                }

                // Il neige !!!!!!!!!!!!!!!

                if (temps > 2 )
                {
                    Console.WriteLine("Alors je vais essayer d’en profiter. Je prends mes gants, mon bonnet, mon écharpe.");
                    Console.WriteLine("Ma voiture est dans le garage ? 1=oui/2=non)");
                    voitureGarage = int.Parse(Console.ReadLine());

                    if (voitureGarage > 1)
                    {
                        Console.WriteLine("Je prends ma pelle à neige et je dégage ma voiture. Je range ma pelle dans la voiture au cas ou et je go en montage pour la journée");
                    }
                    else
                    {
                        Console.WriteLine("Ma voiture etait bien au chaud dans le garage je pars directement en montagne pour la journée.");
                    }

                    Console.WriteLine("J’aviserai sur place pour louer l’équipement qui me manque.");
                }

                Console.WriteLine("Je suis chez moi pour manger? (1=oui/2=non)");
                midi = int.Parse(Console.ReadLine());

                if (midi < 2)
                {
                    Console.WriteLine("Je suis motivé pour cuisiner (1=oui/2=non)");
                    motiver = int.Parse(Console.ReadLine());

                    if (motiver > 1)
                    {
                        Console.WriteLine("Je me fais petits pois, purée de carottes et un steak.");
                    }
                    else
                    {
                        Console.WriteLine("ce sera juste un sandwich fait rapidement avec salade, tomate, cornichon, oeufs durs, jambon et beurre.");
                    }

                }
                else
                {
                    Console.WriteLine("Je suis au ski donc je dois me trouvé un restaurant. ");
                    

                    do
                    {
                        Console.WriteLine("J'ai trouvé un restaurant y a t-il une place de libre (1=oui/2=non)");
                        restaurant = int.Parse(Console.ReadLine());
                        if (restaurant > 1)
                        {
                            Console.WriteLine("Je retourne faire du ski jusqu'à ce que une place se libere");
                        }
                    } while (restaurant  > 1);

                    Console.WriteLine("J'ai bien mangé je retourne sur les pistes jusqu’à leur fermeture en vérifiant l’heure après chaque descente. Puis je rentrerai chez moi.");
                }

                Console.WriteLine("je suis au ski l'aprem ? (1=oui/2=Non)");
                ski = int.Parse(Console.ReadLine());
                if (ski < 1)
                {
                    Console.WriteLine("Je ne suis pas au ski je contact des amis pour voir si ils sont chaud pour sortir ou play (1=dispo/2=non dispo)");
                    amis = int.Parse(Console.ReadLine());

                    if(amis < 2)
                    {
                        Console.WriteLine("Alors on fait des trucs ensemble");
                    }
                    else
                    {
                        Console.WriteLine("je me contente de m’occuper de mes plantes, je me souviens que j’avais un souci de cochenilles. Il va falloir s’en débarrasser !");
                    }


                }

                Console.WriteLine("C'est l'heure de manger le repas du soir!! 1=sorti avec les amis, 2=occupé de mes plantes, 3=play avec amis, 4=ski");
                repas = int.Parse(Console.ReadLine());

                if (repas > 0 && repas < 2)
                {
                    Console.WriteLine("Je vais resto avec les potos!!");
                }

                if(repas > 1 && repas < 3)
                {
                    Console.WriteLine("J’ai eu tout le temps de préparer un festin, je vais même pouvoir proposer à ma famille de profiter du repas ensemble");
                }

                if (repas > 2 && repas < 4)
                {
                    Console.WriteLine("Je n’ai pas vu le temps passer, il va falloir manger sur le pouce un repas rapide à préparer.");
                }

                if(repas > 3 && repas < 5)
                {
                    Console.WriteLine("je suis condamné à manger rapidement, je suis trop fatigué pour me faire un bon repas.");
                }


            }

        }
    }
}
