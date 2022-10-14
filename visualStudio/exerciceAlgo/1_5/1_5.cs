using System;

namespace _1_5
{
    class Program
    {
        static void Main(string[] args)
        {
            float sommeInitial;
            float interet;
            float nombreAnnee;
            float interetSimple;
            float interetCompose;

            Console.WriteLine("Veuillez saisir la somme sur votre compte");
            sommeInitial = float.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir l'interet offert par la banque");
            interet = float.Parse(Console.ReadLine()) / 100;

            Console.WriteLine("Veuillez saisir le nombre d'année de placement");
            nombreAnnee = int.Parse(Console.ReadLine());

            interetSimple = sommeInitial * (1 + nombreAnnee * interet ) - sommeInitial;

            interetCompose = sommeInitial * MathF.Pow(1 + interet, nombreAnnee) - sommeInitial;

            Console.WriteLine($"La somme de vos intéret simple son de {interetSimple}");

            Console.WriteLine($"La somme de vos intéret composé son de {interetCompose}");

                
        }
    }
}
