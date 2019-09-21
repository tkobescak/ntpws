<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

xmlns:foo="http://www.foo.org/" xmlns:bar="http://www.bar.org">
<xsl:template match="/">
  <html>
  <body>
  <h1>2 zadatak xmlns</h1>
    <table border="1">
      <tr bgcolor="#9acd32">
        <th>Ime</th>
        <th>Prezime</th>
        <th>Starost</th>
        <th>Adresa</th>
        <th>imenaDjece</th>
      </tr>
      <xsl:for-each select="catalog/foo:cd">
      <tr>
        <td><xsl:value-of select="Ime"/></td>
        <td><xsl:value-of select="Prezime"/></td>
        <td><xsl:value-of select="Starost"/></td>
        <td><xsl:value-of select="Adresa"/></td>
        <td><xsl:value-of select="bar:imenaDjece"/></td>
      </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
