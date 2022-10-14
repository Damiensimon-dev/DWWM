using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ExerciceTrousse
{
    abstract class Trousse
    {
        private int _volume;
        private bool _estOuverte;

        public Trousse(int volume)
        {
            _volume = volume;
        }

        public void Ouvrir()
        {

        }

        public void Fermer()
        {

        }

        public int Volume
        {
            get { return _volume; }
            private set { _volume = value; }
        }

        public bool EstOuverte
        {
            get { return _estOuverte; }
            private set { _estOuverte = value; }
        }
    }
}
