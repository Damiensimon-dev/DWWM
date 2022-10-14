<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="TANT_QUE (faim > 0) FAIRE"/>
    <extension extnom="inactif"/>
    <fonction fctcode="" fctetat="inactif"/>
    <F2 F2lignes="" F2defaut="" F2para="" F2etat="inactif"/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param epaisseurLigne="2" epaisseurPoint="2" arrondiAuto="vrai" totalAffichages="1000" nbDecimales="8" maxBoucle="500000" totalBoucles="5000000"/>
    <item code="200#declarationfonctions" algoitem="FONCTIONS_UTILISEES"/>
    <item code="100#declarationsvariables" algoitem="VARIABLES">
        <item code="1#NOMBRE#plat" algoitem="plat EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#faim" algoitem="faim EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#reste" algoitem="reste EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#place_assiette" algoitem="place_assiette EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#cafe" algoitem="cafe EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#digestif" algoitem="digestif EST_DU_TYPE NOMBRE"/>
        <item code="1#NOMBRE#service" algoitem="service EST_DU_TYPE NOMBRE"/>
    </item>
    <item code="101#debutalgo" algoitem="DEBUT_ALGORITHME">
        <item code="2#faim#pasliste" algoitem="LIRE faim"/>
        <item code="2#plat#pasliste" algoitem="LIRE plat"/>
        <item code="2#reste#pasliste" algoitem="LIRE reste"/>
        <item code="2#place_assiette#pasliste" algoitem="LIRE place_assiette"/>
        <item code="15#faim > 0" algoitem="TANT_QUE (faim > 0) FAIRE">
            <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
            <item code="4#je prends une assiette#1" algoitem="AFFICHER &quot;je prends une assiette&quot;"/>
            <item code="15#plat > 0 ET reste > 0 ET place_assiette > 0 ET faim > 0" algoitem="TANT_QUE (plat > 0 ET reste > 0 ET place_assiette > 0 ET faim > 0) FAIRE">
                <item code="16#debuttantque" algoitem="DEBUT_TANT_QUE"/>
                <item code="4#je me sers et je passe au plat suivant#1" algoitem="AFFICHER &quot;je me sers et je passe au plat suivant&quot;"/>
                <item code="2#faim#pasliste" algoitem="LIRE faim"/>
                <item code="6#faim &lt; 1" algoitem="SI (faim &lt; 1) ALORS">
                    <item code="7#debutsi" algoitem="DEBUT_SI"/>
                    <item code="4#je vais m'asseoir et je mange#1" algoitem="AFFICHER &quot;je vais m'asseoir et je mange&quot;"/>
                    <item code="8#finsi" algoitem="FIN_SI"/>
                </item>
                <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
            </item>
            <item code="17#fintantque" algoitem="FIN_TANT_QUE"/>
        </item>
        <item code="2#cafe#pasliste" algoitem="LIRE cafe"/>
        <item code="2#digestif#pasliste" algoitem="LIRE digestif"/>
        <item code="6#cafe === 1 OU digestif === 1" algoitem="SI (cafe === 1 OU digestif === 1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#j'en prends un#1" algoitem="AFFICHER &quot;j'en prends un&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
        </item>
        <item code="2#service#pasliste" algoitem="LIRE service"/>
        <item code="6#service === 1" algoitem="SI (service === 1) ALORS">
            <item code="7#debutsi" algoitem="DEBUT_SI"/>
            <item code="4#je demande l'addition, je paie , je laisse un pourboire#1" algoitem="AFFICHER &quot;je demande l'addition, je paie , je laisse un pourboire&quot;"/>
            <item code="8#finsi" algoitem="FIN_SI"/>
            <item code="9#sinon" algoitem="SINON">
                <item code="10#debutsinon" algoitem="DEBUT_SINON"/>
                <item code="4#je paie et je ne laisse pas de pourboire#1" algoitem="AFFICHER &quot;je paie et je ne laisse pas de pourboire&quot;"/>
                <item code="11#finsinon" algoitem="FIN_SINON"/>
            </item>
        </item>
    </item>
    <item code="102#finalgo" algoitem="FIN_ALGORITHME"/>
</Algo>
