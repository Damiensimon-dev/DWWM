using System;

namespace _1_7_2Damien
{
    class Program
    {
        static void Main(string[] args)
        {
            int a;
            int b;
            int c;

            Console.WriteLine("Veuillez saisir un nombre");
            a = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un nombre");
            b = int.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir un nombre");
            c = int.Parse(Console.ReadLine());

            if (a < b)
            {
                if (c < a)
                {
                    Console.WriteLine($"{c} plus petit que {a} plus petit que {b}");
                }
                else
                {
                    if (c > b)
                    {
                        Console.WriteLine($"{a} plus petit que {b} plus petit que {c}");
                    }
                    else
                    {
                        Console.WriteLine($"{a} plus petit que {c} plus petit que {b}");
                    }
                }
            }
            else
            {
                if (c < b)
                {
                    Console.WriteLine($"{c} plus petit que {b} plus petit que {a}");
                }
                else
                {
                    if (a < c)
                    {
                        Console.WriteLine($"{b} plus petit que {a} plus petit que {c}");
                    }
                    else
                    {
                        Console.WriteLine($"{b} plus petit que {c} plus petit que {a}");
                    }
                }
            }
        }
    }
}
