using System;

namespace _1_7_1
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;

            Console.WriteLine("Veuillez saisir un nombre ");
            a = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un autre nombre");
            b = int.Parse(Console.ReadLine());

            if ( a > b )
            {
                Console.WriteLine($"{a} plus grand que {b}");
            }
            else
            {
                Console.WriteLine($"{a} plus petit que {b}");
            }

          
        }
    }
}
