/*SELECT * 
FROM adventureworks2019.salesperson as sp
inner join adventureworks2019.salesterritory as st on sp.TerritoryID = st.TerritoryID*/

/*SELECT st.name
		, sp.salesquota
FROM adventureworks2019.salesperson as sp
inner join adventureworks2019.salesterritory as st on sp.TerritoryID = st.TerritoryID
where -- sp.BusinessEntityID= 275 
	st.name = 'Canada'*/
    
/*SELECT *
FROM adventureworks2019.salesperson as sp
left outer join adventureworks2019.salesterritory as st on sp.TerritoryID = st.TerritoryID
where st.TerritoryID is null*/

/*SELECT *
FROM adventureworks2019.salesperson as sp
right outer join adventureworks2019.salesterritory as st on sp.TerritoryID = st.TerritoryID*/

/*SELECT *
FROM adventureworks2019.salesorderheader as soh
right outer join adventureworks2019.currencyrate as cr on soh.CurrencyRateID = cr.CurrencyRateID
order by cr.CurrencyRateID
limit 50;*/

/*SELECT SalesOrderNumber, SalesOrderLineNumber
FROM adventureworksdw2019.factresellersales
GROUP BY SalesOrderNumber, SalesOrderLineNumber
-- HAVING COUNT(*) > 1*/

/*SELECT   frs.*
		,dm.EnglishProductName
FROM adventureworksdw2019.dimproduct as dm
RIGHT OUTER JOIN adventureworksdw2019.factresellersales as frs on dm.ProductKey = frs.ProductKey*/

/*SELECT *
FROM adventureworksdw2019.dimemployee
CROSS JOIN adventureworksdw2019.dimsalesterritory
order by EmployeeKey;
-- stessa cosa di :
SELECT *
FROM adventureworksdw2019.dimemployee, adventureworksdw2019.dimsalesterritory
order by EmployeeKey*/





