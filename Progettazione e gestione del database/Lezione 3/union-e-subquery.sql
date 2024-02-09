-- SELECT * 
-- FROM ifts_2024.budget2023

-- UNION ALL

-- SELECT *
-- FROM ifts_2024.budget2024;


-- SELECT 	idCustomer
-- 		,Importo
-- FROM ifts_2024.budget2023

-- UNION 

-- SELECT 	idCustomer
-- 		,Importo
-- FROM ifts_2024.budget2024;

-- SELECT SalesOrderNumber
-- 		,SalesAmount AS amount_internet
-- 		,0 AS amoun_reseller
-- FROM adventureworksdw2019.FactInternetSales

--   UNION ALL

-- SELECT SalesOrderNumber
-- 		,0 AS amount_internet
-- 		,SalesAmount AS amoun_reseller
-- FROM adventureworksdw2019.FactResellerSales;

-- SELECT GeographyKey,EnglishCountryRegionName,City
-- FROM adventureworksdw2019.DimGeography
-- WHERE GeographyKey IN (SELECT GeographyKey FROM adventureworksdw2019.DimReseller)

-- SELECT EnglishDescription,StartDate as Date
--   FROM adventureworksdw2019.DimProduct as a 
--   WHERE StartDate = (SELECT MAX(StartDate) AS MAXDATE FROM adventureworksdw2019.DimProduct)

-- SELECT lastname, BaseRate ,DepartmentName
-- FROM adventureworksdw2019.DimEmployee AS esterna
-- WHERE BaseRate >
--                 (SELECT AVG(BaseRate) AS AVG_BASERATE
-- 					FROM adventureworksdw2019.DimEmployee AS interna
-- 					WHERE interna.DepartmentName = esterna.DepartmentName 
-- 					GROUP BY interna.DepartmentName)
--  ORDER BY DepartmentName

-- SELECT  d1.departmentName,
-- 		d1.budget,
-- 		total.total_salaries,
-- 		d1.budget - total.total_salaries AS budget_after_salaries
-- FROM   (SELECT DepartmentName, SUM(BaseRate) AS total_salaries
-- 		FROM adventureworksdw2019.DimEmployee
-- 		GROUP BY DepartmentName
-- 	   ) AS total
-- INNER JOIN adventureworksdw2019.DimDepartment AS d1 ON d1.DepartmentName = total.DepartmentName

-- select *
-- From (
-- 		select   Anno
-- 				,idCustomer
-- 				,Importo
-- 		From ifts_2024.budget2023

-- 		union all

-- 		select   Anno
-- 				,idCustomer
-- 				,Importo
-- 		From ifts_2024.budget2024
-- ) as budget
-- where idCustomer = 529 and 2023

-- select 	 Anno
-- 		,max(importo) as MaxImp
-- From (
-- 		select   Anno
-- 				,idCustomer
-- 				,Importo
-- 		From ifts_2024.budget2023

-- 		union all

-- 		select   Anno
-- 				,idCustomer
-- 				,Importo
-- 		From ifts_2024.budget2024
-- ) as budget
-- group by Anno
-- order by MaxImp;

-- delete
-- from ifts_2024.budget2024
-- where Anno = 0;

select resellername
from adventureworksdw2019.dimreseller
where ResellerKey in ( select distinct ResellerKey
						from adventureworksdw2019.factresellersales

					)