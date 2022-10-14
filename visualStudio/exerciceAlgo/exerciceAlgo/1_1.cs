using System;

namespace exerciceAlgo
{
    class Program
    {
        static void Main(string[] args)
        {
            int nombre1;
            int nombre2;
            double resultat;

            Console.WriteLine("Veuillez saisir un nombre entier");
            // WriteLine = un retour a la ligne automatique

            nombre1 = Int32.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un nombre entier");
            nombre2 = Int32.Parse(Console.ReadLine());

            resultat = (nombre1 + nombre2) / 2D;
            //D ou d pour le double

            Console.WriteLine($"Le resultat de la moyenne de deux nombre entier est de {resultat}");
        }
    }
}
