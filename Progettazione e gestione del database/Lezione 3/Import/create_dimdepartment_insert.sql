-- Per creare la tabella DimDepartment
USE AdventureWorksDW2019;
CREATE TABLE DimDepartment(
DepartmentKey int AUTO_INCREMENT NOT NULL,
DepartmentName nvarchar(50) NULL,
Budget numeric(32, 4) NULL,
PRIMARY KEY (`DepartmentKey`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

insert into DimDepartment (DepartmentName,Budget)
SELECT DepartmentName, SUM(BaseRate) +20 AS Budget
FROM DimEmployee
 GROUP BY DepartmentName