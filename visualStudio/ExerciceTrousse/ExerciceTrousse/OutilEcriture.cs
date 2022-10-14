using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ExerciceTrousse
{
    abstract class OutilEcriture : IOutil
    {
        private string _couleur;
        private int _capaciterEcriture;

        public string Couleur
        {
            get { return _couleur; }
            set { _couleur = value; }
        }

        public int CapaciterEcriture
        {
            get { return _capaciterEcriture; }
        }

        private void Ecrire()
        {

        }

        public void Utiliser()
        {

        }


    }
}
