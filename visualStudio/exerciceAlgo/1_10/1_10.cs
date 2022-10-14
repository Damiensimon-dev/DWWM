using System;

namespace _1_10
{
    class Program
    {
        static void Main(string[] args)
        {
            int n;
            int nb;
            int somme;


            Console.WriteLine("Combien de nombres parfait voulez vous?");
            n = int.Parse(Console.ReadLine());
            nb = 2;
            somme = 0;
            do
            {
                for (int i = 1; i < nb; i++)
                {
                    if (nb % i == 0)
                    {
                        somme = somme + i;
                    }
                }
                if (somme == nb)
                {
                    Console.WriteLine(nb + " est un parfait !");
                    n = n - 1;
                }
                nb = nb + 1;
                somme = 0;
            } while (n > 0);
        }
    }
}
