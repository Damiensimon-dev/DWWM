using System;

namespace eval1_2
{
    class Program
    {
        static void Main(string[] args)
        {
            int age;

            Console.WriteLine("saisir votre âge");

            age = int.Parse(Console.ReadLine());

            if (age <= 21)
            {
                Console.WriteLine($"Vous avez {age} ans, tu es un 2000");
            }
            else
            {
                Console.WriteLine($"Vous avez {age} ans, tu es pas un 2000");
            }

        }
    }
}
