using System;

namespace _1_8
{
    class Program
    {
        static void Main(string[] args)
        {
            int annee;

            Console.WriteLine("Veuillez saisir une année");

            annee = int.Parse(Console.ReadLine());

            if (annee % 4 != 0)
            {
                Console.WriteLine("L'année n'est pas bissextile");
            }
            else
            {
                if (annee % 100 == 0 && annee % 400 != 0)
                {
                    Console.WriteLine("L'année n'est pas bessextile");
                }
                else
                {
                    Console.WriteLine("L'année est bissextile");
                }
            }
        }
    }
}
