using System;

namespace _2._2
{
    class Program
    {
        static void Main(string[] args)
        {
            int minTemperature;
            int maxTemperature;
            int i;
            string unite;
            const string quit = "quit";
            double resultat;

            do
            {
                Console.WriteLine("Entrez une unité entre degrès Celsius ou Fahrenheit (C ou F ou quit pour quitter le programme)");
                unite = Console.ReadLine();

                if (unite == quit)
                {
                    Console.WriteLine("Bye Bye");
                    QuitterProgramme();
                }

                Console.WriteLine("Entre une température minimale à convertir");
                minTemperature = int.Parse(Console.ReadLine());

                Console.WriteLine("Entre une température maximale a convertir (cette température est supérieure à la température minimale)");
                maxTemperature = int.Parse(Console.ReadLine());

                for ( i = minTemperature; i < maxTemperature; i++)
                {
                    if (unite == "C")
                    {
                        resultat = (i * 9 / 5) + 32;
                        Console.WriteLine($"La valeur est de {resultat} degrés Fahrenheit");
                    }
                    else
                    {
                        resultat = (i - 32) * 5 / 9;
                        Console.WriteLine($"La valeur est de {resultat} degrés Celsieus");
                            
                    }
                }
            } while (true);

            
        }

        private static void QuitterProgramme()
        {
            Environment.Exit(0);
        }
    }
}
