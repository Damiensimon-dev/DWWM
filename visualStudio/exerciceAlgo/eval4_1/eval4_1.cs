using System;

namespace eval4_1
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] tab = new string[6];
            string saisie;
            

            tab[0] = "Avez-vous votre permis?";
            tab[1] = "Aimez-vous faire du ping-pong?";
            tab[2] = "Avez-vous des enfants?";
            tab[3] = "Dormez-vous beaucoup?";
            tab[4] = "Paul je suis nul?";
            tab[5] = "Damien c'etait dur ?!!!";

            

            Console.WriteLine($"{tab[0]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();
            Console.WriteLine($"{tab[1]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();
            Console.WriteLine($"{tab[2]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();
            Console.WriteLine($"{tab[3]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();
            Console.WriteLine($"{tab[4]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();
            Console.WriteLine($"{tab[5]} (répondre par vrai/faux)");
            saisie = Console.ReadLine();

            
        }
    }
}
