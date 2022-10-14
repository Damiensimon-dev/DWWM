using System;

namespace _1_2
{
    class Program
    {
        static void Main(string[] args)
        {
            float rayon;
            float aire;
            double volume;

            Console.WriteLine("Veuillez saisir le rayon d'une sphère");
            rayon = float.Parse(Console.ReadLine());

            aire = (4 * MathF.PI) * MathF.Pow(rayon,2);

            Console.WriteLine($"L'aire de la sphère est de {aire}");

            volume = (4d / 3d * MathF.PI * MathF.Pow(rayon, 3));

            Console.WriteLine($" Le volume de votre sphère est de {volume}");

            
        }
    }
}
