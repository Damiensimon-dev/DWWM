using System;

namespace _1_4
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int stockage;

            Console.WriteLine("Veuillez saisir le premier nombre A ");
            a = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir le deuxieme nombre B ");
            b = int.Parse(Console.ReadLine());

            stockage = a;
            a = b;
            b = stockage;

            Console.WriteLine($"{a} est devenu {b}");

            
        }
    }
}
