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

SELECT ProductKey
FROM adventureworksdw2019.factresellersales
GROUP BY ProductKey
HAVING COUNT(*) > 1






