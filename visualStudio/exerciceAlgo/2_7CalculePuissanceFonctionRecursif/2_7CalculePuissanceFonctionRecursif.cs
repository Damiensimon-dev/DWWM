using System;

namespace _2_7CalculePuissanceFonctionRecursif
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine($"Le calcule de la puissance de deux nombre entier est de : {CalculDePuissance(5, 1, 5)}");
        }

        private static ulong CalculDePuissance(ulong nombreUn, ulong nombreDeux, ulong nombreUnStockage) 
        {
            if (nombreDeux == 1)
            {
                return nombreUn;
            }
            else
            {
                nombreUn = nombreUn * nombreUnStockage;
                nombreDeux--;
                return CalculDePuissance(nombreUn, nombreDeux, nombreUnStockage);
            }
        }
    }
}
