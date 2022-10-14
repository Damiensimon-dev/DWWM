using System;

namespace _3_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int[] tab = { 0, 12, 15, 16, 17, 30, 35, 42, 72, 101, 218 };
            int n;
            int i;
            bool pasTrouve = true;

            Console.WriteLine(" Entrez un nombre entier à chercher");
            n = int.Parse(Console.ReadLine());

            for ( i = 0; i < tab.Length; i++)
            {
                if (tab[i] == n)
                {
                    Console.WriteLine($"Le nombre {n} est dans le tableau à l'indice {i}");
                    pasTrouve = false;
                }
            }
            if (pasTrouve)
            {
                Console.WriteLine($"Le nombre {n} n'a pas été trouvé dans le tableau");
            }
        }
    }
}
