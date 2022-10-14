using System;

namespace calculeDeuxChiffreR
{
    class Program
    {
        static void Main(string[] args)
        {


            Console.WriteLine("Veuillez saisir un chiffre entier");
            int a = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un autre chiffre entier");
            int b = int.Parse(Console.ReadLine());

            Console.WriteLine($"Le resultat est de {CalculerUneSommeDeDeuxEntierEnRecursif(a, b)}");
        }

        private static int CalculerUneSommeDeDeuxEntierEnRecursif(int a, int b)
        {
            if (b > 0)
            {
                
                a++;
                b--;
                
            }
            if (b == 0 )
            {
                return a;
            }
            else
            {
                return CalculerUneSommeDeDeuxEntierEnRecursif(a, b);
            }
        }
    }
}
