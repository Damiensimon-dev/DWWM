using System;

namespace _2._4
{
    class Program
    {
        static void Main(string[] args)
        {
            float s;
            int compteurMagasins = 0;

            Console.WriteLine("Somme de base de barnabé");
            s = float.Parse(Console.ReadLine());

            while (s > 0)
            {
                compteurMagasins = compteurMagasins + 1;
                s = s / 2 - 1;
            }

            Console.WriteLine($"Banarbé a dépénsé son argent dans {compteurMagasins} magasins");
        }
    }
}
