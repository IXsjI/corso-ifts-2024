-- click destro su view -> create view... -> inserire:

  /*SELECT d1.departmentName,
	d1.budget,
	total.total_salaries,
	d1.budget - total.total_salaries AS budget_after_salaries
	FROM( 	SELECT DepartmentName, SUM(BaseRate) AS total_salaries
			FROM adventureworksdw2019.DimEmployee
			GROUP BY DepartmentName
	) AS total
	INNER JOIN    adventureworksdw2019.DimDepartment d1 ON d1.DepartmentName = total.DepartmentName

-- apply -> ti crea la view:

  /*CREATE 
		ALGORITHM = UNDEFINED 
		DEFINER = `root`@`localhost` 
		SQL SECURITY DEFINER
	VIEW `ifts_2024`.`v_budget_emploee_by_department` AS
		SELECT 
			`d1`.`DepartmentName` AS `departmentName`,
			`d1`.`Budget` AS `budget`,
			`total`.`total_salaries` AS `total_salaries`,
			`d1`.`Budget` - `total`.`total_salaries` AS `budget_after_salaries`
		FROM
			((SELECT 
				`adventureworksdw2019`.`dimemployee`.`DepartmentName` AS `DepartmentName`,
					SUM(`adventureworksdw2019`.`dimemployee`.`BaseRate`) AS `total_salaries`
			FROM
				`adventureworksdw2019`.`dimemployee`
			GROUP BY `adventureworksdw2019`.`dimemployee`.`DepartmentName`) `total`
			JOIN `adventureworksdw2019`.`dimdepartment` `d1` ON (`d1`.`DepartmentName` = `total`.`DepartmentName`))*/
            
-- è possibile creare la view anche in un altro database perché i database comunicano tra loro come in questo caso dove lo abbiamo creato in ifts_2024

-- non occupano spazio perché vengono eseguite sempre -> cioè che il risultato non viene salvato

-- eseguire la view
/*select * from ifts_2024.v_budget_emploee_by_department*/

