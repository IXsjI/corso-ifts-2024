-- tabelle temporanee
/*CREATE TEMPORARY TABLE IF NOT EXISTS
ifts_2024.temp_table
AS (
	SELECT * 
	FROM ifts_2024.v_budget_emploee_by_department
);*/

-- select * from ifts_2024.temp_table

-- elimina la tabell temp (viene eliminata automaticamente alla chiusura della sessione)
-- MYSQL -> sessione = workbench / SQL SERVER -> sessione = scheda in cui lavori
-- In MYSQL puoi richiamere la tabella temp anche da altre schede mentre in SQL SERVER no

/*DROP TEMPORARY TABLE ifts_2024.temp_table;*/

-- --------------------------------

-- WITH
	/*with q as (
		select *
        from ifts_2024.budget2023
        union all
        select *
        from ifts_2024.budget2024
    )
    , q1 as (
		select *
		from ifts_2024.product
    )
    
    
    select *
    from q
    where importo > 5*/