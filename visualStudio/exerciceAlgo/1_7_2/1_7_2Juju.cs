using System;

namespace _1_7_2
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int c;
            int stockage;

            Console.WriteLine("Veuillez saisir un nombre entier");
            a = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un nombre entier");
            b = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un nombre entier");
            c = int.Parse(Console.ReadLine());

            while (a > b || b > c)
            {
                if (a > b)
                {
                    stockage = a;
                    a = b;
                    b = stockage;
                }
                if (b > c)
                {
                    stockage = b;
                    b = c;
                    c = stockage;
                }
            }
            Console.WriteLine($"{a} est plus petit que {b} plus petit que {c}");

        }
    }
}
