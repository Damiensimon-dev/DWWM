using System;

namespace _1_3
{
    class Program
    {
        static void Main(string[] args)
        {
            float rayon;
            float angle;
            float aireDuSecteurCirculaire;

            Console.WriteLine("Veuillez saisir l'angle");
            angle = float.Parse(Console.ReadLine());

            Console.WriteLine("Veuillez saisir le rayon");
            rayon = float.Parse(Console.ReadLine());

            aireDuSecteurCirculaire = (MathF.PI * MathF.Pow(rayon, 2) * angle / 360);

            Console.WriteLine($"L'aire du secteur circulaire est de {aireDuSecteurCirculaire}");

        }
    }
}
