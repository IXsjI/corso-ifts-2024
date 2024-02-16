SELECT *
	,cast(ModifiedDate as Date)										as castTOdate
    ,concat(FirstName, "-", LastName)								as concat
    ,lower(PersonType)												as lower
    ,upper(Title)													as upper
    ,length(Demographics)											as length
    ,now()															as now
    ,year(ModifiedDate)												as year
    ,date_add(ModifiedDate, INTERVAL -1 MONTH)						as dateadd
    ,concat(ifnull(upper(Title),""), " ", FirstName, " ", LastName)	as cliente
    ,CASE 
		WHEN length(LastName) = 6 THEN "il cognome è lungo 6 caratteri" 
        WHEN length(LastName) BETWEEN 7 and 10 THEN "Il cognome"
        ELSE "Default"
	 END as l_cognome
FROM adventureworks2019.person
-- where year(ModifiedDate) > 2012 and cast(ModifiedDate as Date) > '2013-07-31' and cast(ModifiedDate as Date) < '2013-12-31'
-- va bene anche senza cast in questo caso
where ModifiedDate BETWEEN '2013-07-31' and '2013-12-31'
-- https://www.w3schools.com/mysql/mysql_ref_functions.asp


