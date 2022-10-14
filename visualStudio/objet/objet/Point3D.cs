using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace objet
{
    class Point3D : Point2D
    {
        private int _z;

        public int Z
        {
            get { return _z; }
            set { _z = value; }
        }

        public Point3D(int _x, int _y, int _z) : base(_x, _y )
        {
            Z = _z;
        }
    }
}
