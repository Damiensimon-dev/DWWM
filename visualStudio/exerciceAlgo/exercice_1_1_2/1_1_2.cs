using System;

namespace exercice_1_1_2
{
    class Program
    {
        static void Main(string[] args)
        {

			int nb1;
			int nb2;
			double resultat;
			Boolean refaireUnCalcul;
            string reponsePourRefaireUnCalcul;

            do
            {
                Console.WriteLine("Veuillez saisir un nombre");
                nb1 = int.Parse(Console.ReadLine());

                Console.WriteLine("Veuillez saisir un nombre");
                nb2 = int.Parse(Console.ReadLine());

                resultat = (nb1 + nb2) / 2D;

                Console.WriteLine($"La moyenne de deux nombre est {resultat}");

                Console.WriteLine("Voulez-vous refaire un calcul ? (oui/non)");

                reponsePourRefaireUnCalcul = Console.ReadLine().ToLower();

                refaireUnCalcul = reponsePourRefaireUnCalcul.Equals("oui");
                
            } while (refaireUnCalcul);


	

		}
	}
}
