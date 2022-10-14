using System;

namespace _2._1._2
{
    class Program
    {
        static void Main(string[] args)
        {
            string saisieUtilisateur;
            string[] saisie;

            Console.WriteLine("Veuillez saisir des kilomètres ou des miles a convertir avec son unité de mesure (km ou mi) séparé par un espace !!");

            saisieUtilisateur = Console.ReadLine();

            saisie = saisieUtilisateur.Split(" ");

            if (saisie.Length < 2)
            {
                Console.WriteLine ($" {double.Parse(saisie[0])} km = {double.Parse(saisie[0]) / 1.609} miles");
            }
            else if (saisie[1] == "mi")
            {
                Console.WriteLine($" {double.Parse(saisie[0])} mi = {double.Parse(saisie[0]) * 1.609} kilomètre");
            }
            else
            {
                Console.WriteLine($" {double.Parse(saisie[0])} km = {double.Parse(saisie[0]) / 1.609} miles");
            }
            
        }

    }
}
