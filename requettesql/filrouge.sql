-- Procédure de calcul du delai moyen de facturation des commandes

DELIMITER |

CREATE PROCEDURE delaiMoye(out result INT)

BEGIN
set result =null;
SELECT ROUND(AVG(DATEDIFF(	com_facture_date,	com_com_date ))) AS `Delai`
FROM commandes;


END |

DELIMITER ;

--methode2
DELIMITER $$

CREATE PROCEDURE DelaiMoyen()
BEGIN
    DECLARE Delai_Moyen INT DEFAULT 0;

SELECT AVG(DATEDIFF(com_facture_date, com_com_date))
INTO  Delai_Moyen
FROM commandes;

SELECT  Delai_Moyen;
END $$

DELIMITER ;

CALL DelaiMoyen();