using System;

namespace _1_6
{
    class Program
    {
        static void Main(string[] args)
        {
            int nombre;
            float reste;
            bool estPremier = true;

            Console.WriteLine("Veuillez saisir un nombre");

            nombre = int.Parse(Console.ReadLine());

            for (int i = 2; i < nombre; i++)
            {
                reste = nombre % i;
                if (reste == 0)
                {
                    estPremier = false;
                }
            }
            if (estPremier)
            {
                Console.WriteLine("Votre nombre est un nombre premier");
            }
            else
            {
                Console.WriteLine("Votre nombre n'est pas premier");
            }
        }
    }
}
