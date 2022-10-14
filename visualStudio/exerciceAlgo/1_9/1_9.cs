using System;

namespace _1_9
{
    class Program
    {
        static void Main(string[] args)
        {
            int nombre;
           
            Console.WriteLine("Veuillez saisir un nombre entier");
            nombre = int.Parse(Console.ReadLine());

            for (int i = 2; i < nombre; i++)
            {
                if (nombre % i == 0)
                {
                    Console.WriteLine($"{i} est un diviseur");
                }
            }
        }
    }
}
