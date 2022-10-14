using System;

namespace _2._2._1
{
    class Program
    {
        static void Main(string[] args)
        {
            double temperature;
            double resultat;
            string saisie;
            string[] tabsaisie;
            string unite;
            const double minTemperature = -459.67;
            const double maxTemperature = 5000000;

            do
            {
                Console.WriteLine("Saisir une température entre -459,67 et 5 000 000 espacée de son unité de mesure (C ou F)");
                saisie = Console.ReadLine();

                tabsaisie = saisie.Split(" ");

                temperature = Double.Parse(tabsaisie[0]);
                
            } while (temperature > maxTemperature || temperature < minTemperature);

            unite = tabsaisie[1];

            if (unite == "C")
            {
                resultat = ((temperature * 9 / 5) + 32);
                Console.WriteLine($"La valeur est de {resultat} degrès Fahrenheit");
            }
            else
            {
                resultat = ((temperature - 32) * 5 / 9);
                Console.WriteLine($"La valeur est de {resultat} degrés Celsieus");
            }
        }
    }
}
