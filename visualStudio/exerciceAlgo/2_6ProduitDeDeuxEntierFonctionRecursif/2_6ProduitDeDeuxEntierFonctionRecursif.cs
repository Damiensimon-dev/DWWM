using System;

namespace _2_6ProduitDeDeuxEntierFonctionRecursif
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine($"Le produit des nombre un et nombre deux est : {ProduitDeDeuxEntier(4, 80, 4)}");
        }
        public static int ProduitDeDeuxEntier(int nombreUn, int nombreDeux, int nombreUnStockage) 
        {
            if(nombreDeux == 1) 
            {
                return nombreUn;
            }
            else
            {
                nombreUn = nombreUn + nombreUnStockage;
                nombreDeux--;
                return ProduitDeDeuxEntier(nombreUn, nombreDeux, nombreUnStockage);
            } 
        }
    }
}
