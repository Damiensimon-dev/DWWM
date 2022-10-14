using System;

namespace _1_1_3
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] nombre;
            string saisie;
            double moyenne = 0;

            Console.WriteLine("Saisir des chiffres ou nombres séparer par un point !!!");
            saisie = Console.ReadLine();

            nombre = saisie.Split("lol");

            for (int i = 0; i < nombre.Length; i++)
            {
                moyenne = moyenne + int.Parse(nombre[i]);
            }

            Console.WriteLine($"La moyenne de vos chiffres et nombre et de {moyenne / nombre.Length}");




        }
    }
}
