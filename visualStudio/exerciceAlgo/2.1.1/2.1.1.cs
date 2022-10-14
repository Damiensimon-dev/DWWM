using System;

namespace _2._1._1
{
    class Program
    {
        static void Main(string[] args)
        {
            double kilometre;
            string sortir;
            double miles;
            

            do
            {
                
                Console.WriteLine("Veuillez saisir une valeur en kilomètre ou q pour quitter");

                sortir = Console.ReadLine();

                if (sortir.Equals("q"))
                {
                    break;
                    //Environment.Exit(0); //arrete le terminal apllication.exit(0) arrete l'appli
                }
               
                kilometre = double.Parse(sortir);

                miles = kilometre / 1.609;

                if (kilometre >= 0.01 && kilometre <= 1000000 )
                {
                    Console.WriteLine($"Le nombre de kilomètre en miles est de : {miles} ");
                }
                else
                {
                    Console.WriteLine("La valeur est hors limite");
                }

            } while (true);
        }
    }
}
