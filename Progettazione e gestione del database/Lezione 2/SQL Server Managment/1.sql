/****** Script per comando SelectTopNRows da SSMS  ******/
SELECT TOP (2000) [BusinessEntityID]
      ,[PersonType]
      ,[NameStyle]
      ,[Title]
      ,[FirstName]
      ,[MiddleName]
      ,[LastName]
      ,[Suffix]
      ,[EmailPromotion]
      ,[AdditionalContactInfo]
      ,[Demographics]
      ,[rowguid]
      ,[ModifiedDate]
  FROM [AdventureWorks2019].[Person].[Person]
  --WHERE ModifiedDate >= '2013-01-01' 
  --AND ModifiedDate >= '2013-031-01'
  --WHERE ModifiedDate BETWEEN '2013-01-01' AND '2013-31-12'
	--WHERE PersonType ='EM' AND Title ='Mr.'
	--WHERE PersonType ='EM' 
		--AND EmailPromotion = 1
		--or Title = Mr.
	--WHERE Title = 'Mr.' or Title = 'Ms.'
	--WHERE Title IN ('Mr.','Ms.')
	--WHERE Title NOT IN ('Mr.','Ms.')
	--	OR Title is null

	--WHERE LastName LIKE 'D%'

	--WHERE LastName +  '-' + FirstName NoT LIKE '%ROB%'

	--order by LastName Desc, FirstName Asc
	
	
	ORDER BY
		CASE WHEN PersonType = 'EM' THEN 1
			 WHEN PersonType = 'SP' THEN 2
			 WHEN PersonType = 'VC' THEN 3
			 WHEN PersonType = 'SC' THEN 4
			 WHEN PersonType = 'GC' THEN 5
			 WHEN PersonType = 'IN' THEN 6
		END

  --select distinct Title 
	--From [AdventureWorks2019].[Person].[Person]