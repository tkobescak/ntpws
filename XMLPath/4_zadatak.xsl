<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method='html' version='1.0' indent='yes'/>
	<xsl:template match="/">
		<html>
		<body>
			<h1>Osobe</h1>
			<table border="1">
			  <tr>
				<th>Ime</th>
				<th>Prezime</th>
				<th>Adresa</th>
				<th>Starost</th>				
			  </tr>
			  <xsl:for-each select="Ljudi/Osoba">
			  <xsl:if test="@spol='M' and prezime='Perkovic'">
				  <tr>
					<td><xsl:value-of select="ime"/></td>
					<td><xsl:value-of select="prezime"/></td>
					<td><xsl:value-of select="adresa"/></td>
					<td><xsl:value-of select="starost"/></td>
				  </tr>
			  </xsl:if>
			  </xsl:for-each>
			</table>
		</body>
		</html>
	</xsl:template>
</xsl:stylesheet>